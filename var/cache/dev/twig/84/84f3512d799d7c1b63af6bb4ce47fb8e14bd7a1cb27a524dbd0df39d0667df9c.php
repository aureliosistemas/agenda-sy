<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_0fe20de790e04fd2b620675530ee2f85f512ba7de5aef281748e72aaaa8a7575 extends Twig_Template
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
        $__internal_77dade0bf717f30e10b90ce96b94f8b70012ddd50a64779c3ba82e5aa6f50477 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77dade0bf717f30e10b90ce96b94f8b70012ddd50a64779c3ba82e5aa6f50477->enter($__internal_77dade0bf717f30e10b90ce96b94f8b70012ddd50a64779c3ba82e5aa6f50477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_715edf2d4a2a864db4daa4105672e6b3f2580124a837976753e7ccead4c75dab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_715edf2d4a2a864db4daa4105672e6b3f2580124a837976753e7ccead4c75dab->enter($__internal_715edf2d4a2a864db4daa4105672e6b3f2580124a837976753e7ccead4c75dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_77dade0bf717f30e10b90ce96b94f8b70012ddd50a64779c3ba82e5aa6f50477->leave($__internal_77dade0bf717f30e10b90ce96b94f8b70012ddd50a64779c3ba82e5aa6f50477_prof);

        
        $__internal_715edf2d4a2a864db4daa4105672e6b3f2580124a837976753e7ccead4c75dab->leave($__internal_715edf2d4a2a864db4daa4105672e6b3f2580124a837976753e7ccead4c75dab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
