<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_f03a46f2f72b005a60562a0fe0bc96d641f9a49e57e0cabd4d766a89eeef0051 extends Twig_Template
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
        $__internal_43f5e2225c6367b14f6909132c6e2d5c47de8c4043f3dbe54e72f6aea094eb75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43f5e2225c6367b14f6909132c6e2d5c47de8c4043f3dbe54e72f6aea094eb75->enter($__internal_43f5e2225c6367b14f6909132c6e2d5c47de8c4043f3dbe54e72f6aea094eb75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_77b4394390c1a2c631300e103e557a3876a87175c747919f6ca1716ffac45c4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77b4394390c1a2c631300e103e557a3876a87175c747919f6ca1716ffac45c4e->enter($__internal_77b4394390c1a2c631300e103e557a3876a87175c747919f6ca1716ffac45c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_43f5e2225c6367b14f6909132c6e2d5c47de8c4043f3dbe54e72f6aea094eb75->leave($__internal_43f5e2225c6367b14f6909132c6e2d5c47de8c4043f3dbe54e72f6aea094eb75_prof);

        
        $__internal_77b4394390c1a2c631300e103e557a3876a87175c747919f6ca1716ffac45c4e->leave($__internal_77b4394390c1a2c631300e103e557a3876a87175c747919f6ca1716ffac45c4e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
