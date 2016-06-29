<?php
   $vehicle_type = $_POST['vehicle_type'];
   $first_name = $_POST['first_name'];
   $rangeInput = $_POST['rangeInput'];
   $last_name = $_POST['last_name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $address = $_POST['address'];
   $city = $_POST['city'];
   $province = $_POST['province'];
   $postcode = $_POST['postcode'];
   $birth_day = $_POST['birth_day'];
   $birth_month = $_POST['birth_month'];
   $birth_year = $_POST['birth_year'];
   $rent_or_own = $_POST['rent_or_own'];
   $time_at_residence = $_POST['time_at_residence'];
   $monthly_payment = $_POST['monthly_payment'];
   $employer = $_POST['employer'];
   $job_title = $_POST['job_title'];
   $on_job_months = $_POST['on_job_months'];
   $monthly_income = $_POST['monthly_income'];


   $to = "finance@buyfromcaf.com";
   $from = "From: $email \r\nReturn-path: $email"; 
   $subject  =  "Car loan information";
   $message = "Car Loan Application from: Mr $last_name \r\n";
   $message .=   "From : $first_name \r\n";
   $message .=   "Email : $email \r\n" ;
   $message .=   "Phone : $phone \r\n";
   $message .=   "Address : $address \r\n";
   $message .=   "City : $city \r\n";
   $message .=   "Vehicle type : $vehicle_type \r\n";
   $message .=   "Comfortable Monthly Payment (Dollars) : $rangeInput \r\n";
   $message .=   "Province : $province \r\n";
   $message .=   "Postcode : $postcode \r\n";
   $message .=   "Birth_day : $birth_day " .'-'. $birth_month.'-'. $birth_year;
   $message .=   "\r\n";
   $message .=   "Time at residence : $time_at_residence \r\n";
   $message .=   "Monthly payment : $monthly_payment \r\n";
   $message .=   "Employer : $employer \r\n";
    $message .=   "Job title : $job_title \r\n";
    $message .=   "On job 3 month : $on_job_months \r\n";
    $message .=   "Monthly income : $monthly_income \r\n";




   $mail = mail($to, $subject, $message, $from);        
    

     if($mail){
     echo "<script>
             alert('Enquiry has been sent succesfully. We will get back to you soon'); 
             window.history.go(-1);
     </script>";
       
    }

  ?>