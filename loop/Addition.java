

public class Addition{

    private String colour;
    private int age;
    public static void main(String[] args){
        Addition addition = new Addition("Magenta" , 45);
        System.out.println("Welcome to java tutorials, " + addition.getName());
        System.out.println("Welcome to java tutorials, " + getName2());
        System.out.println("This is colour " + addition.getColour());
        System.out.println("Hello " + addition.getName() + " and your age is " + addition.getAge());
    }

    public Addition(String colour , int age){
        this.colour = colour;
        this.age = age;
    }

    public Addition(){
        
    }

    public String getName(){
        String name = "Joe";
        return name;
    }

    public static String getName2(){
        String name = "KCee";
        return name;
    }

    public String getColour(){
        return colour;
    }

    public int getAge(){
        return this.age;
    }
}