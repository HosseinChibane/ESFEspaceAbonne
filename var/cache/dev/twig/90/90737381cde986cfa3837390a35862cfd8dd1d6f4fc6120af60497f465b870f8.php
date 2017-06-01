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
        $__internal_6033b1bb711341fbac55c25cfa2c508a5fec731ce4f0409465d8a2c4891fbb67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6033b1bb711341fbac55c25cfa2c508a5fec731ce4f0409465d8a2c4891fbb67->enter($__internal_6033b1bb711341fbac55c25cfa2c508a5fec731ce4f0409465d8a2c4891fbb67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_2f239db06f83477524eba1774600e728365c215d86e840e87ad6fbb5cb1181ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f239db06f83477524eba1774600e728365c215d86e840e87ad6fbb5cb1181ba->enter($__internal_2f239db06f83477524eba1774600e728365c215d86e840e87ad6fbb5cb1181ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_6033b1bb711341fbac55c25cfa2c508a5fec731ce4f0409465d8a2c4891fbb67->leave($__internal_6033b1bb711341fbac55c25cfa2c508a5fec731ce4f0409465d8a2c4891fbb67_prof);

        
        $__internal_2f239db06f83477524eba1774600e728365c215d86e840e87ad6fbb5cb1181ba->leave($__internal_2f239db06f83477524eba1774600e728365c215d86e840e87ad6fbb5cb1181ba_prof);

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
