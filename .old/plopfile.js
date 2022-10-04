module.exports = function (plop) {
  // Guide generator
  plop.setPartial("guide-name-data", "{{dashCase guide-name}}");
  plop.setPartial("guide-title-data", "{{titleCase guide-title}}");
  plop.setPartial("guide-action-data", "{{guide-action}}");
  plop.setGenerator("guide", {
    description: "TailwindToolbox guide generator",
    prompts: [
      {
        type: "input",
        name: "guide-name",
        message: "What guide shall I make?",
      },
      {
        type: "input",
        name: "guide-title",
        message: "What title to use in JSON?",
      },
      {
        type: "input",
        name: "guide-action",
        message:
          "What is the guide action? (e.g. ... guide to help you <x> to your TW project)",
      },
    ],
    actions: [
      {
        type: "add",
        path: "dist/guides/{{dashCase guide-name}}.md",
        templateFile: "plop_templates/guide-template.md.hbs",
      },
      {
        type: "add",
        path: "dist/guides/{{dashCase guide-name}}.php",
        templateFile: "plop_templates/guide-template.php.hbs",
      },
      {
        type: "modify",
        path: "dist/includes/data copy.json",
        pattern: /]/g,
        templateFile: "plop_templates/guide-json.hbs",
      },
    ],
  });

  // Template generator
  plop.setPartial("template-name-data", "{{titleCase template-name}}");
  plop.setGenerator("template", {
    description: "TailwindToolbox Template",
    prompts: [
      {
        type: "input",
        name: "template-name",
        message: "What's the name of the template?",
      },
    ],
    actions: [
      {
        type: "add",
        path: "dist/templates/{{dashCase template-name}}.php",
        templateFile: "plop_templates/starter-template.php.hbs",
      },
      {
        type: "add",
        path: "dist/templates/{{dashCase template-name}}-demo.php",
        templateFile: "plop_templates/starter-template-demo.php.hbs",
      },
      {
        type: "add",
        path: "dist/templates/{{dashCase template-name}}.png",
        templateFile: "plop_templates/starter-template.png.hbs",
      },
    ],
  });
};
