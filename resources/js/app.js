import './bootstrap';
import { toggleText } from './toggleText';
import { toggleContactForm } from './toggleContactForm';
// Optionally, you can attach the function to the global window object
window.toggleText = toggleText;
window.toggleContactForm = toggleContactForm;

