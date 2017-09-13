<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_9f6224f034cc85d529136e173070785fa907214a81106382bce53c67852f8111 extends Twig_Template
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
        $__internal_48104c37646927154c69bc762c0287a2b0d8441837ac489895620c98f84bfbd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48104c37646927154c69bc762c0287a2b0d8441837ac489895620c98f84bfbd6->enter($__internal_48104c37646927154c69bc762c0287a2b0d8441837ac489895620c98f84bfbd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_f2ef0009bbf5190bc60cb7c58529e5e70cafaf17694d25cf36af181ac601b94c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2ef0009bbf5190bc60cb7c58529e5e70cafaf17694d25cf36af181ac601b94c->enter($__internal_f2ef0009bbf5190bc60cb7c58529e5e70cafaf17694d25cf36af181ac601b94c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_48104c37646927154c69bc762c0287a2b0d8441837ac489895620c98f84bfbd6->leave($__internal_48104c37646927154c69bc762c0287a2b0d8441837ac489895620c98f84bfbd6_prof);

        
        $__internal_f2ef0009bbf5190bc60cb7c58529e5e70cafaf17694d25cf36af181ac601b94c->leave($__internal_f2ef0009bbf5190bc60cb7c58529e5e70cafaf17694d25cf36af181ac601b94c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
