<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_2a8fc5f11ec21817fcc4934a89b12a04ea837f2c1e32854ed7ec520319ed7f88 extends Twig_Template
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
        $__internal_6f0f2b97e32b1d36499ff4f96a4703d30deb908a94097a52114a84bdb30ab3b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f0f2b97e32b1d36499ff4f96a4703d30deb908a94097a52114a84bdb30ab3b1->enter($__internal_6f0f2b97e32b1d36499ff4f96a4703d30deb908a94097a52114a84bdb30ab3b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_f67a038e4b94ae91609a97c65fb5937eb84f25cb297961e9fa7c190c769c2566 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f67a038e4b94ae91609a97c65fb5937eb84f25cb297961e9fa7c190c769c2566->enter($__internal_f67a038e4b94ae91609a97c65fb5937eb84f25cb297961e9fa7c190c769c2566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_6f0f2b97e32b1d36499ff4f96a4703d30deb908a94097a52114a84bdb30ab3b1->leave($__internal_6f0f2b97e32b1d36499ff4f96a4703d30deb908a94097a52114a84bdb30ab3b1_prof);

        
        $__internal_f67a038e4b94ae91609a97c65fb5937eb84f25cb297961e9fa7c190c769c2566->leave($__internal_f67a038e4b94ae91609a97c65fb5937eb84f25cb297961e9fa7c190c769c2566_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
