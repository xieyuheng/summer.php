---
title: How to organize classes into application?
---

We already have a lot of well organized, dependency injected classes.
How to organize them into an application?

We can use Facade Pattern to provide:

- instances
- simplified constructor methods
- simplified factories

Facade is hand-written dependency injection container.

Facade can only be used in interfacing classes
where objects need to be injected.

interfacing classes includes:

- http routes
- console commands
- ...
