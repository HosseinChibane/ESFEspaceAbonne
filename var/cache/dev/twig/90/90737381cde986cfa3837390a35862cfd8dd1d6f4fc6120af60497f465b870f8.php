<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_fee94444557892131a8423ad87763913c6b5f9bede5a0c09995597f7f9007dc2 extends Twig_Template
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
        $__internal_798eabb2e1e246c07615c71b9d5c78667551fa033d2cd1757879d8cfb772013a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_798eabb2e1e246c07615c71b9d5c78667551fa033d2cd1757879d8cfb772013a->enter($__internal_798eabb2e1e246c07615c71b9d5c78667551fa033d2cd1757879d8cfb772013a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_c31cbe65c1e80c6db25ac792c87f344ca6a97f20eb6cc9216dff2140e0fa3ff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c31cbe65c1e80c6db25ac792c87f344ca6a97f20eb6cc9216dff2140e0fa3ff8->enter($__internal_c31cbe65c1e80c6db25ac792c87f344ca6a97f20eb6cc9216dff2140e0fa3ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_798eabb2e1e246c07615c71b9d5c78667551fa033d2cd1757879d8cfb772013a->leave($__internal_798eabb2e1e246c07615c71b9d5c78667551fa033d2cd1757879d8cfb772013a_prof);

        
        $__internal_c31cbe65c1e80c6db25ac792c87f344ca6a97f20eb6cc9216dff2140e0fa3ff8->leave($__internal_c31cbe65c1e80c6db25ac792c87f344ca6a97f20eb6cc9216dff2140e0fa3ff8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
