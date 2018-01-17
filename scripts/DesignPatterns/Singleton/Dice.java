package DesignPatterns.Singleton;

public class Dice {

    private static Dice instance = null;

    private Dice(){

    }

    public static Dice getInstance() {
        if (instance == null){
            instance = new Dice();
        }
        return instance;
    }

    public int roll(){
        return (int) (Math.random() * 5) + 1;
    }
}
