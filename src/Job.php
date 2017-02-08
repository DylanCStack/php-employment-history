<?php
    class Job
    {
        private $job_title;
        private $employment_duration;
        private $advancement;
        private $departure;


        function __construct($job_title, $employment_duration, $advancement, $departure)
        {
            $this->job_title = $job_title;
            $this->employment_duration = $employment_duration;
            $this->advancement = $advancement;
            $this->departure = $departure;
        }

        function getTitle()
        {
            return $this->job_title;
        }
        function getDuration()
        {
            return $this->employment_duration;
        }
        function getAdvancement()
        {
            return $this->advancement;
        }
        function getDeparture()
        {
            return $this->departure;
        }

        function save()
        {
            array_push($_SESSION['list_of_jobs'], $this);
        }

        static function getAll()
        {
            return $_SESSION['list_of_jobs'];
        }
    }
?>
