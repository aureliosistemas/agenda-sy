<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_6e7a8411032a9e7fc9fee18ab0fb54b26cfafc0b52b476d6a1e159fc6277a230 extends Twig_Template
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
        $__internal_a766b05a314bd14f344a950388a887e2341a6602d6faa0d22c92fcd5f26b2a67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a766b05a314bd14f344a950388a887e2341a6602d6faa0d22c92fcd5f26b2a67->enter($__internal_a766b05a314bd14f344a950388a887e2341a6602d6faa0d22c92fcd5f26b2a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_c51a7a18658cf4ab6d5b8bc6f25a6ec4452d387dfbc4de666c87fb329b5f93d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c51a7a18658cf4ab6d5b8bc6f25a6ec4452d387dfbc4de666c87fb329b5f93d5->enter($__internal_c51a7a18658cf4ab6d5b8bc6f25a6ec4452d387dfbc4de666c87fb329b5f93d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_a766b05a314bd14f344a950388a887e2341a6602d6faa0d22c92fcd5f26b2a67->leave($__internal_a766b05a314bd14f344a950388a887e2341a6602d6faa0d22c92fcd5f26b2a67_prof);

        
        $__internal_c51a7a18658cf4ab6d5b8bc6f25a6ec4452d387dfbc4de666c87fb329b5f93d5->leave($__internal_c51a7a18658cf4ab6d5b8bc6f25a6ec4452d387dfbc4de666c87fb329b5f93d5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
