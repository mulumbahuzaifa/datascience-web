import "./bootstrap";
import { createPopper } from "@popperjs/core";
import "../scss/style.scss";

import Alpine from "alpinejs";

try {
    window.$ = $;
    window.createPopper = createPopper;
} catch (e) {}

window.Alpine = Alpine;

Alpine.start();
