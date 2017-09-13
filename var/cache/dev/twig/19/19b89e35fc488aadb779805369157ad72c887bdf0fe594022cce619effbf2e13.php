<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_bee41b5fcd1a34ba2ad29b481cff02b28acd654d51a18d067d1adc47889e574c extends Twig_Template
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
        $__internal_0f3e2cb1843ba5f1af89f6534d7340d2ca1d86a54a0350f22d12f1a5b131297e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f3e2cb1843ba5f1af89f6534d7340d2ca1d86a54a0350f22d12f1a5b131297e->enter($__internal_0f3e2cb1843ba5f1af89f6534d7340d2ca1d86a54a0350f22d12f1a5b131297e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_b98a4752a66e7d2c4069b7e5744c5a1bfa50acc3873283b1a69f0add136682a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b98a4752a66e7d2c4069b7e5744c5a1bfa50acc3873283b1a69f0add136682a0->enter($__internal_b98a4752a66e7d2c4069b7e5744c5a1bfa50acc3873283b1a69f0add136682a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_0f3e2cb1843ba5f1af89f6534d7340d2ca1d86a54a0350f22d12f1a5b131297e->leave($__internal_0f3e2cb1843ba5f1af89f6534d7340d2ca1d86a54a0350f22d12f1a5b131297e_prof);

        
        $__internal_b98a4752a66e7d2c4069b7e5744c5a1bfa50acc3873283b1a69f0add136682a0->leave($__internal_b98a4752a66e7d2c4069b7e5744c5a1bfa50acc3873283b1a69f0add136682a0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
