<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_a8578c0e9cde79ea15cd2f7dd2cc0d408bc3a61f5851e30f4bab405bbdd016b0 extends Twig_Template
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
        $__internal_db9cbbd96c7b96979463de4ac45abef4389e5856f5eb20e56f2b65d8a6df3f66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db9cbbd96c7b96979463de4ac45abef4389e5856f5eb20e56f2b65d8a6df3f66->enter($__internal_db9cbbd96c7b96979463de4ac45abef4389e5856f5eb20e56f2b65d8a6df3f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_20cf016e4c06df7089de792eab8742bc78d477653bbf9bc3f5e60de955fcc842 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20cf016e4c06df7089de792eab8742bc78d477653bbf9bc3f5e60de955fcc842->enter($__internal_20cf016e4c06df7089de792eab8742bc78d477653bbf9bc3f5e60de955fcc842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_db9cbbd96c7b96979463de4ac45abef4389e5856f5eb20e56f2b65d8a6df3f66->leave($__internal_db9cbbd96c7b96979463de4ac45abef4389e5856f5eb20e56f2b65d8a6df3f66_prof);

        
        $__internal_20cf016e4c06df7089de792eab8742bc78d477653bbf9bc3f5e60de955fcc842->leave($__internal_20cf016e4c06df7089de792eab8742bc78d477653bbf9bc3f5e60de955fcc842_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
