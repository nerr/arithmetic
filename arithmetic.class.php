<?php
    class arithmetic
    {
        private $db;
        private $exam = array();
        public $beginTime, $endTime;


        function __construct()
        {
            //-- connect to database
            $dbHandle = "./arithmetic.db";
            $this->db = new SQLite3($dbHandle);

            //-- arithmetic type
        }

        public function makeExam($ruler, $num = 60)
        {
            $this->exam = array();
            $i = 0;

            while ($i < $num) {
                $figure = array(
                    rand($ruler['range_a']['min'], $ruler['range_a']['max']),
                    rand($ruler['range_b']['min'], $ruler['range_b']['max'])
                );
                if(array_sum($figure) == 0)
                    continue;

                if($i % 2 == 0)
                {
                    $a = $figure[0];
                    $b = $figure[1];
                    $result = array_sum($figure);
                    if($result > $ruler['max'])
                        continue;
                    $sign = ' + ';
                }
                else
                {
                    $a = max($figure);
                    $b = min($figure);
                    $result = $a - $b;
                    $sign = ' - ';
                }

                $this->exam[] = array(
                    'exam' => $a.$sign.$b.' = ',
                    'rightAnswer' => $result,
                    'submitTime'=> '',
                    'result' => ''
                );


                $i = count($this->exam);
            }

            shuffle($this->exam);

            return $this->exam;
        }


        function __destruct()
        {
            $this->db->close();
        }
    }

?>
