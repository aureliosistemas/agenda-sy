<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_f8d63f96e59730aa31ded04d89d5ea9d3c00c754f5589fe6da826ecc8d295fd3 extends Twig_Template
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
        $__internal_18142b244b5af06ca01cc2320830120dc1046a1c0880a237bdbdc78c88fd2b79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18142b244b5af06ca01cc2320830120dc1046a1c0880a237bdbdc78c88fd2b79->enter($__internal_18142b244b5af06ca01cc2320830120dc1046a1c0880a237bdbdc78c88fd2b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_45caa86ebc0eac1150504be4fca34a146779ddc22a52de51de59ad0f73536173 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45caa86ebc0eac1150504be4fca34a146779ddc22a52de51de59ad0f73536173->enter($__internal_45caa86ebc0eac1150504be4fca34a146779ddc22a52de51de59ad0f73536173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_18142b244b5af06ca01cc2320830120dc1046a1c0880a237bdbdc78c88fd2b79->leave($__internal_18142b244b5af06ca01cc2320830120dc1046a1c0880a237bdbdc78c88fd2b79_prof);

        
        $__internal_45caa86ebc0eac1150504be4fca34a146779ddc22a52de51de59ad0f73536173->leave($__internal_45caa86ebc0eac1150504be4fca34a146779ddc22a52de51de59ad0f73536173_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
