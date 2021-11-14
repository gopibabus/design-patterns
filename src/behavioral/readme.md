# Behavioral Design patterns

> **Behavioral Design patterns** are concerned with algorithms and assignment of responsibilities between Objects.

### [Chain of Responsibility / Chain of Command](./CoR/readme.md)
> Lets you pass requests along a chain of handlers. Upon receiving a request, each handler decides either top process the request or to pass it to the next handler in the chain.

### [Command / Action / Transaction](./command/readme.md)
> Turns a request into standalone Object that contains all the information about the request. This transformation lets you parameterize methods with different requests, delay or queue a request's execution and support undoable operations.

### [Iterator](./iterator/readme.md)
> Lets you traverse elements of a collection without exposing underlying representation(list, stack, tree etc.,)

### [Mediator / Intermediary / Controller](./mediator/readme.md)
> Lets you reduce chaotic dependencies between Objects. The pattern restricts direct communications between the Objects and forces them to collaborate only via mediator Object.

### [Memento / Snapshot](./memento/readme.md)
> Lets you save & restore the previous state of an Object without revealing the details of its implementation.

### [Observer / Event-Subscriber / Listener](./observer/readme.md)
> Lets you define subscription mechanism to notify multiple Objects about any events that happen to the Object they're Observing.

### [State](./state/readme.md)
> Lets an Object alter its behavior when its internal state changes. it appears as if the Object changed its class.

### [Strategy](./strategy/readme.md)
> Lets you define family of algorithms, put each of them into a separate class, and make their Objects interchangeable.

### [Template Method](templateMethod/readme.md)
> Defines the skeleton of an algorithm in the super class but lets subclasses override specific steps of the algorithm without changing its structure.

### [Visitor](./visitor/readme.md)
> Lets you separate algorithms from the Objects on which they operate.
