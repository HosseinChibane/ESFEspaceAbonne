<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_a420428ab07baa005047490b3a2fed5a5d2bd83fba1111e6806c96837ff73032 extends Twig_Template
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
        $__internal_f4590f1620c342fc2da9f8c45acdaff32517ca98c45fc69e34244ffc51865431 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4590f1620c342fc2da9f8c45acdaff32517ca98c45fc69e34244ffc51865431->enter($__internal_f4590f1620c342fc2da9f8c45acdaff32517ca98c45fc69e34244ffc51865431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_26961ef078e1eac2eef8670d405936a66644c83136e5e2cdd41087a54b6ffbdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26961ef078e1eac2eef8670d405936a66644c83136e5e2cdd41087a54b6ffbdc->enter($__internal_26961ef078e1eac2eef8670d405936a66644c83136e5e2cdd41087a54b6ffbdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_f4590f1620c342fc2da9f8c45acdaff32517ca98c45fc69e34244ffc51865431->leave($__internal_f4590f1620c342fc2da9f8c45acdaff32517ca98c45fc69e34244ffc51865431_prof);

        
        $__internal_26961ef078e1eac2eef8670d405936a66644c83136e5e2cdd41087a54b6ffbdc->leave($__internal_26961ef078e1eac2eef8670d405936a66644c83136e5e2cdd41087a54b6ffbdc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
