<?
class Data {

	public static function getStudents() {

		return array(
			new Student(array('id'=>1, 'name'=>'Sally', 'score'=>79)),
			new Student(array('id'=>2, 'name'=>'Jack', 'score'=>13)),
			new Student(array('id'=>3, 'name'=>'Jill', 'score'=>31)),
			new Student(array('id'=>4, 'name'=>'Mary', 'score'=>74)),
			new Student(array('id'=>5, 'name'=>'Bob', 'score'=>48)),
			new Student(array('id'=>6, 'name'=>'Elliot', 'score'=>63)),
			new Student(array('id'=>7, 'name'=>'Agatha', 'score'=>98)),
			new Student(array('id'=>8, 'name'=>'Riley', 'score'=>42)),
			new Student(array('id'=>9, 'name'=>'Karis', 'score'=>67))
		);


	}

	public static function getStudent($id) {

		$students = self::getStudents();
		foreach($students as $student) {
			if ($student->id==$id) {
				return $student;
			}
		}

	}



}

?>