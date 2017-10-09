define(function (require) {
  var elgg = require("elgg");
  var Plugin = require("elgg/Plugin");
  /**
   * Theme init
   */
  function theme_init() {

  }

  /**
   * Config CKEditor
   * Override config from CKEditor Addons
   */
  function config_editor(hook, type, params, config) {
    config.removePlugins = 'liststyle,contextmenu,tabletools,resize';
    return config;
  }

  return new Plugin({
    init: function () {
      elgg.register_hook_handler("init", "system", theme_init);
      elgg.register_hook_handler('config', 'ckeditor', config_editor);
    }
  });
});