
<h1>Homework_2.</h1>

<br>

<p><b>1) Создайте абстрактный класс User который содержит абстрактный метод getRole() который должен выводить роль пользователя, например admin, viewer, moderator и тд.</b></p>
<p><b>Создайте классы Admin, Viewer, Moderator, которые наследуют класс User и реализуйте абстрактныей метод getRole().</b></p>
<p><b>Который будет возвращать роль пользователя (подсказка имя класса == имени роли в нижнем регистре).</b></p>
<p><b>Так же реализуйте о методы которые будут получать и сохранять информацию о пользователе.</b></p>
<p><b>Не забудьте о модификаторах доступа, а так же о силе наследования.</b></p>


<?php

trait ConstructTrait
{
public function __construct($status)
    {
        $this->status = $status;
    }
}

trait RoleTrait
{
 public function getRole()
    {   
       if($this->status == strtolower(__CLASS__)){
          return $this->status;
       } else {
           return folse;
       }
    }
}

trait InfTrait
{
    public function setRoleInf($name, $surname, $login, $password)
    {
       $this->name = $name;
       $this->surname = $surname;
       $this->login = $login;
       $this->password = $password;
    }
}

trait SaveTrait
{
    public function saveRole()
    {
       if ($this->getRole() != folse) {
         return $this->roleinf = $roleinf = [
                                    'role' => $this->status,
                                    'name' => $this->name,
                                    'surname' => $this->surname,
                                    'login' => $this->login,
                                    'password' => $this->password,
                                  ];
      }
    }
}

trait GetTrait
{
    public function getRoleInf($key)
    {
         return $this->roleinf[$key]; 
    }
}



abstract class User
{
    protected $status;
    protected $name;
    protected $surname;
    protected $login;
    protected $password;
    protected $roleinf = [];
    protected $key;

    abstract protected function __construct($status);

    abstract protected function getRole();

    abstract protected function setRoleInf($name, $surname, $login, $password);

    abstract protected function saveRole();

    abstract protected function getRoleInf($key);
}

class Admin extends User
{
    use ConstructTrait, InfTrait, SaveTrait, GetTrait, RoleTrait;
}

class Viewer extends User
{
    use ConstructTrait, InfTrait, SaveTrait, GetTrait, RoleTrait;
}

class Moderator extends User
{
    use ConstructTrait, InfTrait, SaveTrait, GetTrait, RoleTrait;
}


echo '<b>Test class Admin.</b><br>';
echo "Inquiry is - 'admin'<br>";
$admin1 = new Admin('admin');
echo '<b>Answer:</b> Status  ' . "'" . $admin1->getRole() . "'" . ' is correct.<br>';
echo "Inquiry is - 'moderator'" . '<br>';
$admin2 = new Admin('moderator');
echo '<b>Answer:</b> Status ' . "'" . $admin2->getRole() . "'" . ' is not correct.<br>';
$name = 'Ivan';
$surname = 'Ivanov';
$login = 'first';
$password = 12345;
$admin1->setRoleInf($name, $surname, $login, $password);
echo 'Input $name - ' . $name . ', $surname - ' . $surname . ', $login - ' . $login . ', $password - ' . $password . '<br>';
$admin1->saveRole();
echo "Get 'surname'.<br>"; 
echo "<b>Answer:</b> 'surname' - " . $admin1->getRoleInf('surname'). '<br>';

echo '<br>';

echo '<b>Test class Viewer.</b><br>';
echo "Inquiry is - 'viewer'<br>";
$viewer1 = new Viewer('viewer');
echo '<b>Answer:</b> Status  ' . "'" . $viewer1->getRole() . "'" . ' is correct.<br>';
echo "Inquiry is - 'moderator'" . '<br>';
$viewer2 = new Viewer('moderator');
echo '<b>Answer:</b> Status ' . "'" . $viewer2->getRole() . "'" . ' is not correct.<br>';
$name = 'Petr';
$surname = 'Petrov';
$login = 'second';
$password = 23456;
$viewer1->setRoleInf($name, $surname, $login, $password);
echo 'Input $name - ' . $name . ', $surname - ' . $surname . ', $login - ' . $login . ', $password - ' . $password . '<br>';
$viewer1->saveRole();
echo "Get 'login'.<br>"; 
echo "<b>Answer:</b> 'login' - " .$viewer1->getRoleInf('login'). '<br>';

echo '<br>';

echo '<b>Test class Moderator.</b><br>';
echo "Inquiry is - 'moderator'<br>";
$moderator1 = new Moderator('moderator');
echo '<b>Answer:</b> Status  ' . "'" . $moderator1->getRole() . "'" . ' is correct.<br>';
echo "Inquiry is - 'admin'" . '<br>';
$moderator2 = new Moderator('admin');
echo '<b>Answer:</b> Status ' . "'" . $moderator2->getRole() . "'" . ' is not correct.<br>';
$name = 'Sidor';
$surname = 'Sidorov';
$login = 'third';
$password = 34567;
$moderator1->setRoleInf($name, $surname, $login, $password);
echo 'Input $name - ' . $name . ', $surname - ' . $surname . ', $login - ' . $login . ', $password - ' . $password . '<br>';
$moderator1->saveRole();
echo "Get 'password'.<br>"; 
echo "<b>Answer:</b> 'password' - " .$moderator1->getRoleInf('password'). '<br>';

?>

<br><br>


<p><b>2) Спроектируйте классы и интерфейсы, который будут описывать транспортные средства. Например:</b></p>

<p><b>а) автомобиль движется за счет мотора, имеет 4 колеса</b></p>

<p><b>б) велосипед использует мускульную силу, имеет два колеса</b></p>

<p><b>в) танк движется за счет мотора, имеет две гусеницы и умеет стрелять</b></p>

<br>

<p><b>В итоге вызов вашего класса может иметь следующий вызов.</b></p>

<p><b>$car = new Car();</b></p>

<p><b>echo $car->getWheelCount(); //вернет количество колес</b></p>

<p><b>echo $car->getDoorsCount(); // вернет количество дверей</b></p>

<p><b>echo $car->getMotorType(); // вернет тип двигателя: мотор или мускулы</b></p>

<p><b>echo $car->accelerate(10); // установить скорость 10 км/ч</b></p>

<p><b>echo $car->decelerate(5); // уменьшить скорость до 5 км/ч</b></p>

<br>

<p><b>$bike = new Bike();</b></p>

<p><b>echo $bike->getWheelCount(); //вернет количество колес</b></p>

<p><b>echo $bike->getMotorType(); // вернет тип двигателя: мотор или мускулы</b></p>

<p><b>echo $bike->accelerate(10); // установить скорость 10 км/ч</b></p>

<p><b>echo $bike->decelerate(5); // уменьшить скорость до 5 км/ч</b></p>

<br>

<p><b>$tank = new Tank();</b></p>

<p><b>echo $tank->getСaterpillar(); //вернет количество траков гусеницы</b></p>

<p><b>echo $tank->getMotorType(); // вернет тип двигателя: мотор или мускулы</b></p>

<p><b>echo $tank->accelerate(10); // установить скорость 10 км/ч</b></p>

<p><b>echo $tank->decelerate(5); // уменьшить скорость до 5 км/ч</b></p>

<p><b>echo $tank->fire(); // сделать выстрел, "Бах"</b></p>

<br>

<p><b>Вы так же можете добавить методы или изменить как вам угодно</b></p>

<br><br><br>

<?php

trait ClassNameTrait
{
    public function getClassName() {
        echo '<b>Answer:</b> This is ' . __CLASS__ . '.<br>';
    }
}

trait WheelTrait
{
 public function getWheelCount() {
     if (__CLASS__ == 'Bike') {
        return 'Number of wheels: 2.<br>';
     } elseif (__CLASS__ == 'Car')  {
          return 'Number of wheels: 4.<br>';
     } 
     return folse;
  }
}

trait MotorTrait
{
 public function getMotorType() {
     if (__CLASS__ == 'Bike') {
        return 'Engine type: muscles.<br>';
     } elseif (__CLASS__ == 'Car' or __CLASS__ == 'Tank')  {
          return 'Engine type: motor.<br>';
     } 
     return folse;
  }
}

trait SpeedUpTrait
{
 public function accelerate($speed_set) {
      echo "Set speed " . $speed_set . " km / h.<br>";
  }
}

trait SpeedDownTrait
{
 public function decelerate($speed_down) {
      echo "Reduced speed to " . $speed_down . " km / h.<br>";
  }
}


interface Foralltransport
{
    public function getMotorType();
    public function accelerate($speed_set);
    public function decelerate($speed_down);
}

interface Forbikecar
{
    public function getWheelCount();
}

interface Forcar
{
    public function getDoorsCount();
}

interface Fortank
{
    public function getСaterpillar();
    public function fire();
}



class Bike implements Foralltransport, Forbikecar
{
    use ClassNameTrait, WheelTrait, MotorTrait, SpeedUpTrait, SpeedDownTrait;
}



class Car implements Foralltransport, Forbikecar, Forcar
{
    use ClassNameTrait, WheelTrait, MotorTrait, SpeedUpTrait, SpeedDownTrait;

    public function getDoorsCount()
    {
      return 'Number of doors: 4.<br>';
    }
}

class Tank implements Foralltransport, Fortank
{
    use ClassNameTrait, MotorTrait, SpeedUpTrait, SpeedDownTrait;

    public function getСaterpillar()
    {
      return 'Number of caterpillars: 2.<br>';
    }

    public function fire()
    {
      return 'Shot fired: "Bang".<br>';
    }
}

$bike = new Bike();
echo $bike->getClassName();
echo $bike->getWheelCount();
echo $bike->getMotorType();
echo $bike->accelerate(10);
echo $bike->decelerate(5);

echo '<br>';

$car = new Car();
echo $car->getClassName();
echo $car->getWheelCount();
echo $car->getDoorsCount();
echo $car->getMotorType();
echo $car->accelerate(10);
echo $car->decelerate(5);

echo '<br>';

$tank = new Tank();
echo $tank->getClassName();
echo $tank->getСaterpillar();
echo $tank->getMotorType();
echo $tank->accelerate(10);
echo $tank->decelerate(5);
echo $tank->fire();

?>

<br><br><br>

