<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_31a9cad127ddcd79d1113d5cd0e6f89daa3f082421c68c1a986d1f9287c99c53 extends Twig_Template
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
        $__internal_699c25176080fb38879c57094f1d0cb5508da8f05247e374a899d929c44a51e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_699c25176080fb38879c57094f1d0cb5508da8f05247e374a899d929c44a51e5->enter($__internal_699c25176080fb38879c57094f1d0cb5508da8f05247e374a899d929c44a51e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_c3c365d9fb96a652c6f0f9fe1baa9166913afbe482607c3208206af37035796c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3c365d9fb96a652c6f0f9fe1baa9166913afbe482607c3208206af37035796c->enter($__internal_c3c365d9fb96a652c6f0f9fe1baa9166913afbe482607c3208206af37035796c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_699c25176080fb38879c57094f1d0cb5508da8f05247e374a899d929c44a51e5->leave($__internal_699c25176080fb38879c57094f1d0cb5508da8f05247e374a899d929c44a51e5_prof);

        
        $__internal_c3c365d9fb96a652c6f0f9fe1baa9166913afbe482607c3208206af37035796c->leave($__internal_c3c365d9fb96a652c6f0f9fe1baa9166913afbe482607c3208206af37035796c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
