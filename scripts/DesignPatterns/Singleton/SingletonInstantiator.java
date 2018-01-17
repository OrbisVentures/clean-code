package DesignPatterns.Singleton;

public class SingletonInstantiator {

    public SingletonInstantiator() {
        Dice dice = Dice.getInstance();
        System.out.println(dice.roll());
    }
}
