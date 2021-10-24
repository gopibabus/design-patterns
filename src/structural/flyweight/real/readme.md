Before we begin, please note that real applications for the Flyweight pattern in PHP are pretty scarce. This stems from the single-thread nature of PHP, where you’re not supposed to be storing ALL of your application’s objects in memory at the same time, in the same thread. While the idea for this example is only half-serious, and the whole RAM problem might be solved by structuring the app differently, it still demonstrates the concept of the pattern as it works in the real world. All right, I’ve given you the disclaimer. Now, let’s begin.

In this example, the Flyweight pattern is used to minimize the RAM usage of objects in an animal database of a cat-only veterinary clinic. Each record in the database is represented by a **Cat** object. Its data consists of two parts:

1. Unique (extrinsic) data such as a pet’s name, age, and owner info.
2. Shared (intrinsic) data such as a breed name, color, texture, etc.

The first part is stored directly inside the **Cat** class, which acts as a context. The second part, however, is stored separately and can be shared by multiple cats. This shareable data resides inside the **CatVariation** class. All cats that have similar features are linked to the same **CatVariation** class, instead of storing the duplicate data in each of their objects.
