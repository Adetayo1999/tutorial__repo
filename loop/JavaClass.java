

public class JavaClass{
    private String name;
    private String age;
    private String gender;

    public static void main(String[]  argument){
        JavaClass codevolution = new JavaClass("Janet" , "45" , "female");
        System.out.println(codevolution.getUserInfo());  
    }

    public JavaClass(String name , String age , String gender){
         this.name = name;
         this.age= age;
         this.gender = gender;
    }

    public String getUserInfo(){
          if(this.gender == "male"){
              return "Hello "+this.name+" Your Age "+this.age+" does not match the criteria as you are a "+this.gender;
          }

          else{
              return "Hello "+this.name+" Your Age "+this.age+" matches the criteria for the "+this.gender+ " job offer";
          }
    }
}