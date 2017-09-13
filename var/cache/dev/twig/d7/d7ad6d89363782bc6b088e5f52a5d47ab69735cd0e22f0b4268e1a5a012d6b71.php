<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_cab5a67889bd3a426ce6a939f99ae35d294977358932f5d4e077defbbb342f18 extends Twig_Template
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
        $__internal_03664ea5500fdb80fbcbae1c309ae67be85da76ececb61aba1bd05b28cd97997 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03664ea5500fdb80fbcbae1c309ae67be85da76ececb61aba1bd05b28cd97997->enter($__internal_03664ea5500fdb80fbcbae1c309ae67be85da76ececb61aba1bd05b28cd97997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_a91a12f61ff1d9412ad860de320563380b67e398863542db7a60e25da1a4ce03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a91a12f61ff1d9412ad860de320563380b67e398863542db7a60e25da1a4ce03->enter($__internal_a91a12f61ff1d9412ad860de320563380b67e398863542db7a60e25da1a4ce03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_03664ea5500fdb80fbcbae1c309ae67be85da76ececb61aba1bd05b28cd97997->leave($__internal_03664ea5500fdb80fbcbae1c309ae67be85da76ececb61aba1bd05b28cd97997_prof);

        
        $__internal_a91a12f61ff1d9412ad860de320563380b67e398863542db7a60e25da1a4ce03->leave($__internal_a91a12f61ff1d9412ad860de320563380b67e398863542db7a60e25da1a4ce03_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
