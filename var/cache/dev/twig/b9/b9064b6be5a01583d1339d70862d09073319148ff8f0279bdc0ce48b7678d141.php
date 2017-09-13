<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_196fc751e8eff37053a59b16d65991cef582337b190b691419e76d75fd72247f extends Twig_Template
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
        $__internal_d0e957f15f21be93638aec1f8b7b80b3504a58798db82fec329c9168ac2f269f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0e957f15f21be93638aec1f8b7b80b3504a58798db82fec329c9168ac2f269f->enter($__internal_d0e957f15f21be93638aec1f8b7b80b3504a58798db82fec329c9168ac2f269f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_bd5de1b0994bda44be7ad81e1be4c6894a76f683854510a26f202005c34fe1d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd5de1b0994bda44be7ad81e1be4c6894a76f683854510a26f202005c34fe1d7->enter($__internal_bd5de1b0994bda44be7ad81e1be4c6894a76f683854510a26f202005c34fe1d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_d0e957f15f21be93638aec1f8b7b80b3504a58798db82fec329c9168ac2f269f->leave($__internal_d0e957f15f21be93638aec1f8b7b80b3504a58798db82fec329c9168ac2f269f_prof);

        
        $__internal_bd5de1b0994bda44be7ad81e1be4c6894a76f683854510a26f202005c34fe1d7->leave($__internal_bd5de1b0994bda44be7ad81e1be4c6894a76f683854510a26f202005c34fe1d7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
