<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_31174c26a28e81f167eb4a79437d4b971be01a35db3e343ad534999a3dcd5bb9 extends Twig_Template
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
        $__internal_3b55cfdc0461f46b5c4cff720a939694ba71b5f6507e290d77b4fb549712c35e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b55cfdc0461f46b5c4cff720a939694ba71b5f6507e290d77b4fb549712c35e->enter($__internal_3b55cfdc0461f46b5c4cff720a939694ba71b5f6507e290d77b4fb549712c35e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_5b98610965d7a2380b6d8570eeaf496df335afbba19847ba66cd0a744ddeb05a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b98610965d7a2380b6d8570eeaf496df335afbba19847ba66cd0a744ddeb05a->enter($__internal_5b98610965d7a2380b6d8570eeaf496df335afbba19847ba66cd0a744ddeb05a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_3b55cfdc0461f46b5c4cff720a939694ba71b5f6507e290d77b4fb549712c35e->leave($__internal_3b55cfdc0461f46b5c4cff720a939694ba71b5f6507e290d77b4fb549712c35e_prof);

        
        $__internal_5b98610965d7a2380b6d8570eeaf496df335afbba19847ba66cd0a744ddeb05a->leave($__internal_5b98610965d7a2380b6d8570eeaf496df335afbba19847ba66cd0a744ddeb05a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
