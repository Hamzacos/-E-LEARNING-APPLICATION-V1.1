<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            function get_data()
                {
                    $name = $_POST['Name'];
                    $file = 'file.json';
                    if(file_exists("$file"))
                        {
                            $current_data = file_get_contents("$file");
                            $array_data = json_decode($current_data);
                            $extra = array(
                                'img'    => $_POST['Image'],
                                'name'   => $_POST['Name'],
                                'email'  => $_POST['Email'],
                                'phone'  => $_POST['Phone'],
                                'number' => $_POST['Number'],
                                'date'   => $_POST['Date'],
                            );
                            $array_data[] = $extra;
                            echo "file exist <br>";
                            return json_encode($array_data);
                        } 
                    else
                        {
                            $datae=array();
                            $datae[]=array(
                                'img'    => $_POST['Image'],
                                'name'   => $_POST['Name'],
                                'email'  => $_POST['Email'],
                                'phone'  => $_POST['Phone'],
                                'number' => $_POST['Number'],
                                'date'   => $_POST['Date'],
                            );
                            echo "file not exist<br/>";
                            return json_encode($datae);
                        }
                }
                $file = 'file.json';
                if(file_put_contents("$file",get_data()))
                    {
                        echo "Sucess";
                    }
                else 
                    {
                        echo "ERROR_404";
                    }
                    exit;
        }
        header('location: student.php')


?>


