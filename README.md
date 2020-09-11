# Design Patterns

There are 3 categories of design patterns:

* Creational
* Structural
* Behavioral

## Creational Design Patterns

- Creational design patterns concern the creation of objects themselves.
- The main usage of Creational design patterns is to separate the instantiation of a class from the usage of that instance.

> EXAMPLE: **Dependency injection**

When thinking of dependency injection, let's outline the four separate roles involved:
- The service to be injected.
- The client that depends on the service being injected.
- The interface that determines how the client can use the service.
- The injector that is responsible for instantiating the service and injecting it into the client.

## Structural design patterns

- Structural design patterns act as interconnectors between entities.
- It serves as a blueprint for how basic classes can be combined to form bigger entities.
- All Structural design patterns involve the interconnections between objects.

## Behavioral design patterns

- Behavioral design patterns work to explain how objects interact with each other.
- How objects can send messages between each other objects.
- How you can divide the steps of various tasks up among classes.
- Structural patterns describe the **static architecture of a design**; Behavioral patterns are more fluid and describe a **flowing process**.

## Architectural patterns

- Architectural patterns address various different constraints in computer systems through addressing **performance limitations, high availability, and also minimization of business risk**.

> EXAMPLES: **Model-View-Controller** architecture, **Microservices** architecture, **Monolithic** architecture, **FLUX** architecture(React)
