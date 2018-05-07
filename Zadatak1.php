<!DOCTYPE html>
<html>
	<body>
		<?php
		/*Napravio sam jednu prostu klasu Person koja predstavlja osobu(covek)
		u realnom svetu. Osoba ima neke svoje atribute i funckije koje blize 
		opisuju osobu i njeno ponasanje. Naravno atributa i funckija mozemo
		da definisemo koliko god zelimo i koliko god nam je potrebno.
		Nakon pravljenja klase imamo instanciranje objekta klase Person
		sa prosledjenim vrednostima koji inicijalizuju atribute i funkciju
		show() koja prikazuje podatke o osobi.*/
			class Person {
				var $name;
				var $surname;
				var $date_of_birth;
				var $age;
				var $jmbg;
				var $address;
				var $city;
				var $phone;
				var $height;
				var $weight;
				
				function __construct($n, $sn, $dob, $age, $jmbg, $adr, $c, $p, $h, $w){
					$this->name = $n;
					$this->surname = $sn;
					$this->date_of_birth = $dob;
					$this->age = $age;
					$this->jmbg = $jmbg;
					$this->address = $adr;
					$this->city = $c;
					$this->phone = $p;
					$this->height = $h;
					$this->weight = $w;
				}
				
				function __desctruct(){
					
				}
				
				public function show()
				{
					echo "Name: ", $this->name, "<br>";
					echo "Surname: ", $this->surname, "<br>";
					echo "Date of birth: ", $this->date_of_birth, "<br>";
					echo "Age: ", $this->age, "<br>";
					echo "JMBG: ", $this->jmbg, "<br>";
					echo "Address: ", $this->address, "<br>";
					echo "City: ", $this->city, "<br>";
					echo "Phone: ", $this->phone, "<br>";
					echo "Height: ", $this->height, "<br>";
					echo "Weight: ", $this->weight, "<br>";

				}
				
				
				
				
			}
			
			$Person1 = new Person("Mladen", 
								  "Mladenovic", 
								  "20.11.1995", 
								  "22", "1234567891234", 
								  "Bul.Zorana Djindjica 121 A/5", 
								  "Nis", 
								  "0604300208", 
								  "192", 
								  "92kg");
			$Person1->show();
			
			
		?>
	</body>
</html>