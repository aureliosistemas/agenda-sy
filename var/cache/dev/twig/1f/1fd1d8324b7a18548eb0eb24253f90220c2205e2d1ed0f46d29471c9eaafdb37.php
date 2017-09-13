<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_c8c02e2e7c4c1be191f60bfcf969a441b80a59321483a91ca09e2dd35689d1c2 extends Twig_Template
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
        $__internal_c507ef199ab8b565f83798634fac1ea347869a488e69c2a30f0f3c7fc36890b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c507ef199ab8b565f83798634fac1ea347869a488e69c2a30f0f3c7fc36890b1->enter($__internal_c507ef199ab8b565f83798634fac1ea347869a488e69c2a30f0f3c7fc36890b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_2302ee383ae0caf49d5c0e8e2247e621a79db91275c8f5330ee698d2ae5d14a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2302ee383ae0caf49d5c0e8e2247e621a79db91275c8f5330ee698d2ae5d14a4->enter($__internal_2302ee383ae0caf49d5c0e8e2247e621a79db91275c8f5330ee698d2ae5d14a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_c507ef199ab8b565f83798634fac1ea347869a488e69c2a30f0f3c7fc36890b1->leave($__internal_c507ef199ab8b565f83798634fac1ea347869a488e69c2a30f0f3c7fc36890b1_prof);

        
        $__internal_2302ee383ae0caf49d5c0e8e2247e621a79db91275c8f5330ee698d2ae5d14a4->leave($__internal_2302ee383ae0caf49d5c0e8e2247e621a79db91275c8f5330ee698d2ae5d14a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
