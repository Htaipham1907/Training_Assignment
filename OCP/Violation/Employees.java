public class Employess {
	private string name;
	private int age;
	prvate int emp_type;
	
	public int paySalary(){
		if (this.emp_type == "fresher"){
			return 500;
		}else if(this.emp_type == "junior"){
			return 500 * 1.75;
		}else{
			return 500 * 2.5;
		}
	}
	
	//....
}