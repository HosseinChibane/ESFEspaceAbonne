<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_bceb2bb600305e049496c5959ca0fa317ce7b7692f2a53d085c5e47193d5f8cf extends Twig_Template
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
        $__internal_3689332442243585a5f22408ebce1b6d47551c256fb0541a1c6a2c426a3cfa75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3689332442243585a5f22408ebce1b6d47551c256fb0541a1c6a2c426a3cfa75->enter($__internal_3689332442243585a5f22408ebce1b6d47551c256fb0541a1c6a2c426a3cfa75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_be24accec9d8259d7653df02f436f09b486b91ef3a1cf3e25d0683f8ea3d1e17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be24accec9d8259d7653df02f436f09b486b91ef3a1cf3e25d0683f8ea3d1e17->enter($__internal_be24accec9d8259d7653df02f436f09b486b91ef3a1cf3e25d0683f8ea3d1e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_3689332442243585a5f22408ebce1b6d47551c256fb0541a1c6a2c426a3cfa75->leave($__internal_3689332442243585a5f22408ebce1b6d47551c256fb0541a1c6a2c426a3cfa75_prof);

        
        $__internal_be24accec9d8259d7653df02f436f09b486b91ef3a1cf3e25d0683f8ea3d1e17->leave($__internal_be24accec9d8259d7653df02f436f09b486b91ef3a1cf3e25d0683f8ea3d1e17_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
