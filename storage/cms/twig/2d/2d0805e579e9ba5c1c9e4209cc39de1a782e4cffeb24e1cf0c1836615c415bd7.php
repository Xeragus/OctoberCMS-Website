<?php

/* C:\xampp7\htdocs\october-playground/themes/hambern-hambern-blank-bootstrap-4/pages/blog.htm */
class __TwigTemplate_9c5bccfbfe2f4cb30351086353ddfb2b68b822526f1943f088d42c6a3287363e extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp7\\htdocs\\october-playground/themes/hambern-hambern-blank-bootstrap-4/pages/blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'blogPosts' %}", "C:\\xampp7\\htdocs\\october-playground/themes/hambern-hambern-blank-bootstrap-4/pages/blog.htm", "");
    }
}
