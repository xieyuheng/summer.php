> We will write down some notes about API design practice.

# Why laravel feels so easy to use?

Ready to start project scaffolding,
which we only have to clone and modify.

Close to web's language HTML CSS JS.

A lot of global helper functions, such as:
- `file_get_contents`, `file_exists`
- `view`, `redirect`, `abort(404)`
- `cache()->remember(...)`

Xie: Is this about using namespace?

The introduction course has OOD, TDD and refactoring built-in
(The example starts from "shameless green" code).

Thus, learning is also manyfold:
- How web works,
- How the framework works,
- How to design good software without too much stress.

Xie: We may also start from the domain -- DDD.

Type hint and implicit conversion, such as "Route Model Binding".

Xie: We should never use this in our code base.

Relationship between models, such as `belongsTo`,
- get getter of the field for free
