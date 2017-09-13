<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_f1375f2854ee9c43923ee702f6f1c76072318d7fe79fcd15d2f2b0e72c516968 extends Twig_Template
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
        $__internal_73d44f5b895c694b38fb014a5c8b0e3d15035d70acfcb5fdfc636f76780dbe46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73d44f5b895c694b38fb014a5c8b0e3d15035d70acfcb5fdfc636f76780dbe46->enter($__internal_73d44f5b895c694b38fb014a5c8b0e3d15035d70acfcb5fdfc636f76780dbe46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_1b25d1aa2f6b657cb02a5fbaac029d0912513c434a94e0f79c818ff67a0b3add = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b25d1aa2f6b657cb02a5fbaac029d0912513c434a94e0f79c818ff67a0b3add->enter($__internal_1b25d1aa2f6b657cb02a5fbaac029d0912513c434a94e0f79c818ff67a0b3add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_73d44f5b895c694b38fb014a5c8b0e3d15035d70acfcb5fdfc636f76780dbe46->leave($__internal_73d44f5b895c694b38fb014a5c8b0e3d15035d70acfcb5fdfc636f76780dbe46_prof);

        
        $__internal_1b25d1aa2f6b657cb02a5fbaac029d0912513c434a94e0f79c818ff67a0b3add->leave($__internal_1b25d1aa2f6b657cb02a5fbaac029d0912513c434a94e0f79c818ff67a0b3add_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
