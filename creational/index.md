# 🏗Creational Design Patterns

> 💠 Design patterns that concern **object creation mechanisms**.

Following are examples of different Creational Design Patterns:
- Simple Factory
- Factory Method
- Abstract Factory Pattern
- Lazy Initialization
- Builder Pattern
- Prototype Pattern

## ⚡️Simple Factory

**Analogy:**
Let's imagine you order a new car; the dealer sends your order off to the factory and the factory builds your car. Your car is sent to you in its assembled form and you don't need to care about how it was made.

**Explanation:**
Similarly, a software factory produces objects for you. The factory takes your request, assembles the object using the constructor and gives them back to you to use. One of these types of Factory pattern is known as the Simple Factory.

**Implementation:**
1. Firstly, we define an abstract class/Interface, which we want to extend with other classes. This class serves to allow us to have common functionality(methods) we want all the classes we build in our factory to have in common.

2. Implement classes by extending Abstract class or implementing Interface that we defined in first step.

3. Build factory class to create objects that we defined in second step.

> [🌍 Reference](https://github.com/gopibabus/design-patterns/tree/master/creational/SimpleFactory)
