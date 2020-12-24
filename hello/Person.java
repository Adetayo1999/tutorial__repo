

public class Person{
    private String name;
    private String gender;

    public Person(String name , String gender){
        this.name = name;
        this.gender =gender;
    }
    public static void main(String[] argument){
        Person tomiwa = new Person("Tomiwa" , "Male");
        System.out.println(tomiwa.getUserInfo());
    }

    public String getUserInfo(){
        return "Hello "+this.name+ " Your Gender Is "+this.gender;
    }
}


