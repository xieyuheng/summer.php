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

Xie: Lavavel migrations (such as creating table) and models are not in the same place,
maybe we can used well typed model (by schema),
and generate creating table migration from the model's schema.

Dependency injection container.

Xie: We need a central way of creating objects,
where nested dependency injections can be given good (config-ed) default values.

# comparing patterns between language implementation and web development

- [web] create object in dependency injection container
  - if domain model need to use table:
    `app.tables.users.find({ ... })`
- [lang] `parse_stmt(String): Stmt` or `parse_exp`

- [web] `controller(Request): Response`
- [lang] `evaluate(Env, Exp): Value`
- [lang] `execute(Env, Stmt): Env`
