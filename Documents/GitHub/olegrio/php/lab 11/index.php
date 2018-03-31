<?php
/**
 * Created by PhpStorm.
 * User: olegfomicev
 * Date: 28.02.2018
 * Time: 20:47
 */



class Database{

    private $link;

    public function __construct()
    {
    $this->connect();
    }



    private function connect()
    {
        $config = require_once 'config.php';
        $dsn='mysql:host='.$config['host'].';dbname='.$config['db_name'].';charset=' . $config['charset'];

        $this->link = new PDO($dsn, $config['username'], $config['password']);

        return $this;
    }


    public function execute($sql)
    {
    $sth = $this->link->prepare($sql);
    return $sth->execute();
    }


    public function query($sql)
    {
        $sth = $this->link->prepare($sql);
        $sth->execute();

    $result = $sth->fetchAll(PDO::FETCH_ASSOC);

    if($result===false){
        return[];
    }
    return $result;

    }
};

$db = new Database();

/**$db->execute("INSERT INTO izdatelstvo SET author='Лукьянов', type='книга', pulpit='кафедра сетей связи',institute='институт связи', name=' о связи'");*/





$users = $db->query("SELECT * FROM izdatelstvo ");
print_r($users);

echo '<br>';
$nm= $users[0]['name'];
print_r($nm);

echo '<!DOCTYPE html><html lang="ru"><head><meta charset="UTF-8"><title>Document</title></head><body><div><select name="authSelect" id=""><option value="">'.$nm.'</option><option value="">'.$nm.'</option></select></div></body></html>';

