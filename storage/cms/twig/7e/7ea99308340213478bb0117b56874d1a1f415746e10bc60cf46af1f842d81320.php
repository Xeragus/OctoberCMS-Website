<?php

/* C:\xampp7\htdocs\october-playground/themes/hambern-hambern-blank-bootstrap-4/pages/contact.htm */
class __TwigTemplate_20c45cdac3f24566201e8622b8675ce73c8b9fbddafaa6e8b93597f992e501d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1>Contact Us</h1>
";
        // line 2
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contactForm"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp7\\htdocs\\october-playground/themes/hambern-hambern-blank-bootstrap-4/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Contact Us</h1>
{% component 'contactForm' %}", "C:\\xampp7\\htdocs\\october-playground/themes/hambern-hambern-blank-bootstrap-4/pages/contact.htm", "");
    }
}
