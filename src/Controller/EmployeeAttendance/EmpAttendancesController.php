<?php

namespace App\Controller\EmployeeAttendance;

use App\Entity\EmpAttendances;
use App\Entity\EmpAttendanceTypes;
use App\Entity\Users;
use Cassandra\Date;
use Cassandra\Time;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Exception\RuntimeException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/employee/attendance")
 */
class EmpAttendancesController extends AbstractController
{
    private EntityManagerInterface $em;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;
    }

    /**
     * @Route("/", name="all_employee_attendance", methods="GET")
     * @return JsonResponse
     */
    public function getAll(): JsonResponse
    {
        try {
            $emp_attendances = $this->em->getRepository(EmpAttendances::class)->findAll();
            if(!$emp_attendances) {
                throw new RuntimeException("No data has found!");
            }

            $res = [];
            foreach ($emp_attendances as $emp_attendance) {
                if (!$emp_attendance->getIsDelete()) {
                    $res1 = [
                        "created" => $emp_attendance->getCreated(),
                    ];

                    $res2 = [
                        "attendance_type" => null,
                    ];
                    if($emp_attendance->getEmpAttendanceType()) {
                        $res2 = [
                            "attendance_type" => $emp_attendance->getEmpAttendanceType()->getName(),
                        ];
                    }
                    $res3 = [
                        "employee" => null,
                    ];
                    if($emp_attendance->getEmployee()) {
                        $res3 = [
                            "employee_id" => $emp_attendance->getEmployee()->getId(),
                            "employee_firstName" => $emp_attendance->getEmployee()->getFirstName(),
                            "employee_lastName" => $emp_attendance->getEmployee()->getLastName(),
                            "employee_email" => $emp_attendance->getEmployee()->getEmail()
                        ];
                    }

                    $res[] = $res1 + $res2 + $res3;
                }
            }

            return $this->json(array("success" => true, "data" => $res), 200);
        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }

    /**
     * @Route("/user/{id}", name="each_employee_attendance", methods="GET")
     * @param $id
     * @return JsonResponse
     */
    public function getByUser($id): JsonResponse
    {
        try {
            $date_time = new \DateTime();
            $date = $date_time->format('Y-m');
            $data = (string)'%'.$date.'%';
            $emp_attendances = $this->em->getRepository(EmpAttendances::class)->getMonthlyEmpAttendance($data, $id);

            if(!$emp_attendances) {
                throw new RuntimeException("No data has found!");
            }

            $res = [];
            foreach ($emp_attendances as $emp_attendance) {
                if (!$emp_attendance->getIsDelete()) {
                    $res1 = [
                        "created" => $emp_attendance->getCreated(),
                    ];

                    $res2 = [
                        "attendance_type" => null,
                    ];
                    if($emp_attendance->getEmpAttendanceType()) {
                        $res2 = [
                            "attendance_type" => $emp_attendance->getEmpAttendanceType()->getName(),
                        ];
                    }
                    $res3 = [
                        "employee" => null,
                    ];
                    if($emp_attendance->getEmployee()) {
                        $res3 = [
                            "employee_id" => $emp_attendance->getEmployee()->getId(),
                        ];
                    }

                    $res[] = $res1 + $res2 + $res3;
                }
            }

            return $this->json(array("success" => true, "data" => $res), 200);
        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }

    /**
     * @Route("/monthly/user", name="monthly_employee_attendance", methods="GET")
     * @param Request $request
     * @return JsonResponse
     */
    public function getMonthlyByUser(Request  $request): JsonResponse
    {
        try {
            $month = $request->query->get('month');
            $year = $request->query->get('year');

            $origin_month = "";
            if($month === 'Jan') {
                $origin_month = "01";
            }if($month === 'Feb') {
                $origin_month = "02";
            }if($month === 'Mar') {
                $origin_month = "03";
            }if($month === 'Apr') {
                $origin_month = "04";
            }if($month === 'May') {
                $origin_month = "05";
            }if($month === 'Jun') {
                $origin_month = "06";
            }if($month === 'Jul') {
                $origin_month = "07";
            }if($month === 'Aug') {
                $origin_month = "08";
            }if($month === 'Sep') {
                $origin_month = "09";
            }if($month === 'Oct') {
                $origin_month = "10";
            }if($month === 'Nov') {
                $origin_month = "11";
            }if($month === 'Dec') {
                $origin_month = "12";
            }

            $data = (string)'%'.$year."-".$origin_month.'%';
            $emp_attendances = $this->em->getRepository(EmpAttendances::class)->getMonthlyAllAttendance($data);

            if(!$emp_attendances) {
                return $this->json(array("success" => true, "data" => [], "message" => "No data has found"), 200);
            }

            $res = [];
            foreach ($emp_attendances as $emp_attendance) {
                if (!$emp_attendance->getIsDelete()) {
                    $res1 = [
                        "created" => $emp_attendance->getCreated(),
                    ];

                    $res2 = [
                        "attendance_type" => null,
                    ];
                    if($emp_attendance->getEmpAttendanceType()) {
                        $res2 = [
                            "attendance_type" => $emp_attendance->getEmpAttendanceType()->getName(),
                        ];
                    }
                    $res3 = [
                        "employee" => null,
                    ];
                    if($emp_attendance->getEmployee()) {
                        $res3 = [
                            "employee_id" => $emp_attendance->getEmployee()->getId(),
                        ];
                    }

                    $res[] = $res1 + $res2 + $res3;
                }
            }

            return $this->json(array("success" => true, "data" => $res), 200);
        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }

    /**
     * @Route("/daily/users/{date}", name="daily_employees_attendance", methods="GET")
     * @return JsonResponse
     */
    public function getAllDailyEmployeeAttendance($date): JsonResponse
    {
        try{
            $date_time = new \DateTime($date);
//            $date = $date_time->format('Y-m-d');
//             $c = \DateTime::createFromFormat('Y-m-d', $date->format('Y-m-d'));
            $date = $date_time->format('Y-m-d');
            $date = '%'. $date . '%';
//            dd($date);

            $getAllEmpAttDaily = $this->em->getRepository(EmpAttendances::class)->getAllEmpAttendanceDaily($date);

//            $emp = $this->em->getRepository(Users::class)->find()

            $attendance = [];
            foreach ($getAllEmpAttDaily as $attAll) {
                if(!$attAll->getIsDelete()) {
                    $attendance[] = [
                        "attendance_type" => $attAll->getEmpAttendanceType()->getId(),
                        "created" => $attAll->getCreated(),
                        "employeeId" => $attAll->getEmployee()->getId(),
                        "firstName" => $attAll->getEmployee()->getFirstName(),
                        "lastName" => $attAll->getEmployee()->getLastName(),
                        "email" => $attAll->getEmployee()->getEmail(),
                    ];
                }
            }

//            $option = [
//                "data" => $attendance,
//            ];

            return $this->json(array("success" => true, "data" => $attendance), 200);
        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }

    /**
     * @Route ("/get-type/{id}", name="get_type_attendance", methods="GET")
     * @param $id
     * @return JsonResponse
     */
    public function getType($id): JsonResponse
    {
        try {
            $date_time = new \DateTime();
//            $get_attendanceToday = $this->em->getRepository(EmpAttendances::class)->findBy(array("employee" => $id));
            $date = $date_time->format('Y-m-d');
            $data = (string)'%'.$date.'%';
            $get_attendanceToday = $this->em->getRepository(EmpAttendances::class)->getDailyEmpAttendance($data, $id);

            $click = 1;

            $format_time = $date_time->format('H:i:s');
            $attendance_type = "";
            if($format_time > "18:00:00") {
                $attendance_type = '4';
            }else if ($format_time > "13:30:00") {
                $attendance_type = '3';
            }else if ($format_time > "12:00:00") {
                $attendance_type = '2';
            }else if ($format_time > "06:30:00") {
                $attendance_type = '1';
            }

            $attendance = [];
            foreach ($get_attendanceToday as $att) {
                if(!$att->getIsDelete()) {
                    $attendance[] = [
                        "attendance_type" => $att->getEmpAttendanceType()->getId(),
                        "created" => $att->getCreated(),
                    ];
                    if($attendance_type == $att->getEmpAttendanceType()->getId()) {
                        $click = 0;
                    }
                }
            }

            $option = [
                "date_time" => $format_time,
                "click" => $click,
                "attendance_type" => $attendance_type,
                "data" => $attendance,
            ];

            return $this->json(array("success" => true, "data" => $option), 200);
        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }

    /**
     * @Route ("/create", name="create_employee_attendance", methods="POST")
     * @param Request $request
     * @return JsonResponse
     */
    public function create(Request $request): JsonResponse
    {
        $param = json_decode($request->getContent(), true);
        try {
            $emp_attendance = new EmpAttendances();

            $emp_attendance->setIsDelete(false);

            //join table
            $attendance_type = $this->em->getRepository(EmpAttendanceTypes::class)->find($param['emp_attendance_type_id']);
            $emp_attendance->setEmpAttendanceType($attendance_type);
            $emp = $this->em->getRepository(Users::class)->find($param['employee_id']);
            $emp_attendance->setEmployee($emp);

            //save data to database
            $this->em->persist($emp_attendance);
            $this->em->flush();
            return $this->json(array("success" => true, "message" => "Created successfully"), 200);
        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }

    /**
     * @Route ("/update/{id}", name="update_employee_attendance", methods="POST")
     * @param $id
     * @param Request $request
     * @return JsonResponse
     */
    public function update($id, Request $request): JsonResponse
    {
        $param = json_decode($request->getContent(), true);
        try {
            $emp_attendance = $this->em->getRepository(EmpAttendances::class)->find($id);
            if(!$emp_attendance) {
                throw new RuntimeException("No data has found!");
            }

            //join table
            if(isset($param['emp_attendance_type_id'])) {
                $attendance_type = $this->em->getRepository(EmpAttendanceTypes::class)->find($param['emp_attendance_type_id']);
                $emp_attendance->setEmpAttendanceType($attendance_type);
            }
            if(isset($param['employee_id'])) {
                $emp = $this->em->getRepository(Users::class)->find($param['employee_id']);
                $emp_attendance->setEmployee($emp);
            }

            return $this->json(array("success" => true, "message" => "Updated successfully"), 200);

        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }

    /**
     * @Route ("/delete/{id}", name="delete_employee_attendance", methods="DELETE")
     */
    public function delete($id): JsonResponse
    {
        try {
            $emp_attendance = $this->em->getRepository(EmpAttendances::class)->find($id);
            if(!$emp_attendance) {
                throw new RuntimeException("No data has found!");
            }

            $emp_attendance->setIsDelete(true);

            //save database
            $this->em->flush();
            return $this->json(array("success" => true, "message" => "Deleted successfully"), 200);
        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }
}
