<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_85171fcd0a765346f5f5b2f264951f4e50ad76d934affcac4449a7682883257a extends Twig_Template
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
        $__internal_d8f9dc886623c31fcf7b00230b39e53fd1b27748e9164882bb0cb280fefeba55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8f9dc886623c31fcf7b00230b39e53fd1b27748e9164882bb0cb280fefeba55->enter($__internal_d8f9dc886623c31fcf7b00230b39e53fd1b27748e9164882bb0cb280fefeba55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_4912f34cbbf1821cf2055ff2656482c42a43ec8aabb1f0b798cd931259561cb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4912f34cbbf1821cf2055ff2656482c42a43ec8aabb1f0b798cd931259561cb8->enter($__internal_4912f34cbbf1821cf2055ff2656482c42a43ec8aabb1f0b798cd931259561cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_d8f9dc886623c31fcf7b00230b39e53fd1b27748e9164882bb0cb280fefeba55->leave($__internal_d8f9dc886623c31fcf7b00230b39e53fd1b27748e9164882bb0cb280fefeba55_prof);

        
        $__internal_4912f34cbbf1821cf2055ff2656482c42a43ec8aabb1f0b798cd931259561cb8->leave($__internal_4912f34cbbf1821cf2055ff2656482c42a43ec8aabb1f0b798cd931259561cb8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
