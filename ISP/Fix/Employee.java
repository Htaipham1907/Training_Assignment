public interface Generalemployee{
 public int clockin()
 public int clockout()
}

public interface Employee{
 public void customerservice()
 public double getPaid()
}

public interface management{
  public double generatereport()
}

public class Staff implements Generalemployee, Employee{
}

public class Manager implements Employee, management{
}