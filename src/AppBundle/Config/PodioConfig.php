<?php

namespace AppBundle\Config;

class PodioConfig{

private $client_key = "aiesecuni";
private $client_secret = "L1ihQQJIsLNfWIFtZ9lFkM5eD0hkq2n3WxEIdWtgJRfIfGrTk28BUKTweu6am4cQ";

private $students_key = 16435885;
private $students_token = "ccdc046b642945a396f94d8905924912";

private $students_expansion_key = 16468521;
private $students_expansion_token = "aa2b3a90218d47fb8eb0a6190cf19869";


    /**
     * @return string
     */
    public function getClientKey()
    {
        return $this->client_key;
    }

    /**
     * @return string
     */
    public function getClientSecret()
    {
        return $this->client_secret;
    }

    /**
     * @return string
     */
    public function getStudentsKey()
    {
        return $this->students_key;
    }

    /**
     * @return string
     */
    public function getStudentsToken()
    {
        return $this->students_token;
    }

    /**
     * @return int
     */
    public function getStudentsExpansionKey()
    {
        return $this->students_expansion_key;
    }


    /**
     * @return string
     */
    public function getStudentsExpansionToken()
    {
        return $this->students_expansion_token;
    }


}


?>