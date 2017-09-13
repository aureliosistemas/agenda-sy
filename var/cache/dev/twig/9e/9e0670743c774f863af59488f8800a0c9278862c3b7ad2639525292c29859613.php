<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_03aa938eff914b1994a708e7be68a2bea04bb846366d3fd1ea4e8aacc9edf4f8 extends Twig_Template
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
        $__internal_fbce132c24cbe916163d702471823ac4b185d4e7b0df56c8166e1a7b09359771 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbce132c24cbe916163d702471823ac4b185d4e7b0df56c8166e1a7b09359771->enter($__internal_fbce132c24cbe916163d702471823ac4b185d4e7b0df56c8166e1a7b09359771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_f66126a7906847b76bf090b8fc5c7292eeabfc433d8d56a52caf04b88d215f5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f66126a7906847b76bf090b8fc5c7292eeabfc433d8d56a52caf04b88d215f5d->enter($__internal_f66126a7906847b76bf090b8fc5c7292eeabfc433d8d56a52caf04b88d215f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_fbce132c24cbe916163d702471823ac4b185d4e7b0df56c8166e1a7b09359771->leave($__internal_fbce132c24cbe916163d702471823ac4b185d4e7b0df56c8166e1a7b09359771_prof);

        
        $__internal_f66126a7906847b76bf090b8fc5c7292eeabfc433d8d56a52caf04b88d215f5d->leave($__internal_f66126a7906847b76bf090b8fc5c7292eeabfc433d8d56a52caf04b88d215f5d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
