<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_4078abc49a60432fb79832f1dd40d9d6c6e110f57742a12ed28485a2e425418d extends Twig_Template
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
        $__internal_215c933d6cee582cff3e6e40b7655516b05a42c967b66501e4f633f241832c34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_215c933d6cee582cff3e6e40b7655516b05a42c967b66501e4f633f241832c34->enter($__internal_215c933d6cee582cff3e6e40b7655516b05a42c967b66501e4f633f241832c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_51c6a3d2d41de7540d55893f0deb5ebb24226f454c8b90b9359d730eb7d54ee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51c6a3d2d41de7540d55893f0deb5ebb24226f454c8b90b9359d730eb7d54ee8->enter($__internal_51c6a3d2d41de7540d55893f0deb5ebb24226f454c8b90b9359d730eb7d54ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_215c933d6cee582cff3e6e40b7655516b05a42c967b66501e4f633f241832c34->leave($__internal_215c933d6cee582cff3e6e40b7655516b05a42c967b66501e4f633f241832c34_prof);

        
        $__internal_51c6a3d2d41de7540d55893f0deb5ebb24226f454c8b90b9359d730eb7d54ee8->leave($__internal_51c6a3d2d41de7540d55893f0deb5ebb24226f454c8b90b9359d730eb7d54ee8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
