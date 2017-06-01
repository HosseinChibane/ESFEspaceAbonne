<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_1e7986ce9e46da5872feceb052447e51bd61c76db68ae2c37fe408b1a324e2d8 extends Twig_Template
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
        $__internal_5de85354aeebe7fcae4f43bcf38a7dac94f08db3a3f8f7cb89a42aaaa5bb5cdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5de85354aeebe7fcae4f43bcf38a7dac94f08db3a3f8f7cb89a42aaaa5bb5cdb->enter($__internal_5de85354aeebe7fcae4f43bcf38a7dac94f08db3a3f8f7cb89a42aaaa5bb5cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_07b946bb69948b9b99802e85595516688ae57cffe6cac35c9fa0c86ec6c80e11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07b946bb69948b9b99802e85595516688ae57cffe6cac35c9fa0c86ec6c80e11->enter($__internal_07b946bb69948b9b99802e85595516688ae57cffe6cac35c9fa0c86ec6c80e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$k, array('placeholder', 'title'), true)): ?>
<?php printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_5de85354aeebe7fcae4f43bcf38a7dac94f08db3a3f8f7cb89a42aaaa5bb5cdb->leave($__internal_5de85354aeebe7fcae4f43bcf38a7dac94f08db3a3f8f7cb89a42aaaa5bb5cdb_prof);

        
        $__internal_07b946bb69948b9b99802e85595516688ae57cffe6cac35c9fa0c86ec6c80e11->leave($__internal_07b946bb69948b9b99802e85595516688ae57cffe6cac35c9fa0c86ec6c80e11_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$k, array('placeholder', 'title'), true)): ?>
<?php printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
