<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_36e79241fb3a040a26d027f37f1a08a7c630acd746a704d2e437bcbc227d1e61 extends Twig_Template
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
        $__internal_e6ddd03008ac5143a31db78c931b75cc0fae77fa4497c2219aabb3cd2e6584f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6ddd03008ac5143a31db78c931b75cc0fae77fa4497c2219aabb3cd2e6584f6->enter($__internal_e6ddd03008ac5143a31db78c931b75cc0fae77fa4497c2219aabb3cd2e6584f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_59f0694fcfd2ea463fb6c2b5a0b6e373fdcbd13cd45a39b303cd49c68bc93984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59f0694fcfd2ea463fb6c2b5a0b6e373fdcbd13cd45a39b303cd49c68bc93984->enter($__internal_59f0694fcfd2ea463fb6c2b5a0b6e373fdcbd13cd45a39b303cd49c68bc93984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_e6ddd03008ac5143a31db78c931b75cc0fae77fa4497c2219aabb3cd2e6584f6->leave($__internal_e6ddd03008ac5143a31db78c931b75cc0fae77fa4497c2219aabb3cd2e6584f6_prof);

        
        $__internal_59f0694fcfd2ea463fb6c2b5a0b6e373fdcbd13cd45a39b303cd49c68bc93984->leave($__internal_59f0694fcfd2ea463fb6c2b5a0b6e373fdcbd13cd45a39b303cd49c68bc93984_prof);

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
