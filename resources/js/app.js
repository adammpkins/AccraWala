import { createApp, h } from "vue";
import { createInertiaApp, Link, Head } from "@inertiajs/inertia-vue3";
import { InertiaProgress } from "@inertiajs/progress";
import Layout from "@/Layouts/Layout";
import CKEditor from "@ckeditor/ckeditor5-vue";
import { vfmPlugin } from "vue-final-modal";

const appName =
  window.document.getElementsByTagName("title")[0]?.innerText || "Laravel";

createInertiaApp({
  title: (title) => `${title} - ${appName}`,
  resolve: (name) => {
    let page = require(`./Pages/${name}`).default;

    if (page.layout === undefined) {
      page.layout = Layout;
    }

    return page;
  },
  setup({ el, app, props, plugin }) {
    return createApp({ render: () => h(app, props) })
      .use(plugin)
      .use(CKEditor)
      .use(vfmPlugin, {
        key: "$vfm",
        componentName: "VueFinalModal",
        dynamicContainerName: "ModalsContainer",
      })
      .component("Link", Link)
      .component("Head", Head)
      .mixin({ methods: { route } })
      .mount(el);
  },
});

InertiaProgress.init({
  color: "red",
  showSpinner: true,
});
